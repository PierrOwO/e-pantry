<template>
    <ModalTable>
                <ModalTableThead>
                    <ModalTableRow header>
                        <ModalTableCell header>Id</ModalTableCell>
                        <ModalTableCell header>Name</ModalTableCell>
                        <ModalTableCell header>Name PL</ModalTableCell>
                    </ModalTableRow>
                </ModalTableThead>
                <ModalTableTbody>
                    <ModalTableRow v-for="(row, index) in categories" :key="row.id">
                        <ModalTableCell>{{ row.id }}</ModalTableCell>
                        <ModalTableCell>{{ row.name }}</ModalTableCell>
                        <ModalTableCell>{{ row.name_pl }}</ModalTableCell>
                    </ModalTableRow>

                </ModalTableTbody>
            </ModalTable>
</template>
<script setup>
import ModalTable from '@/Components/ModalTable.vue';
import ModalTableThead from '@/Components/ModalTableThead.vue';
import ModalTableTbody from '@/Components/ModalTableTbody.vue';
import ModalTableCell from '@/Components/ModalTableCell.vue';
import ModalTableRow from '@/Components/ModalTableRow.vue';

import axios from 'axios';

defineProps({
    body: Number,
});

</script>
<script>
export default {
    props: {
            body: Number,
    },
    data() {
        return{
            categoriesDownloaded: false,
            categories: [],
        }
    },
    methods: {
        getCategories(){
            if(!this.categoriesDownloaded){
                axios.get('/api/categories')
                    .then(response => {
                        this.categories = response.data;
                        this.categoriesDownloaded = true;
                        console.log(this.categories);
                    })
                    .catch(error => {
                        console.error('Error while processing:', error);
                    });
            }

        },
    },
    mounted() {
        if(this.body == 1){
            this.getCategories();
        }
    }
}
</script>
