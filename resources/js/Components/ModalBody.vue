<template >
    <ModalTable v-if="body !== undefined && body === 1">
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
    <span v-else class="no-data-found-span">No data found</span>
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

            subCategoriesDownloaded: false,
            subCategories: [],

            pantriesDownloaded: false,
            pantries: [],

            pantryHistoryDownloaded: false,
            pantryHistory: [],
        }
    },
    methods: {
        handleBodyChange(value) {
            if (value === 1) {
                this.getCategories();
            } else if (value === 2) {
                console.log('body 2')
            } else if (value === 3) {
                console.log('body 3')
            }
        },
        getCategories(){
            if(!this.categoriesDownloaded){
                axios.get('/api/categories')
                    .then(response => {
                        this.categories = response.data;
                        this.categoriesDownloaded = true;
                    })
                    .catch(error => {
                        console.error('Error while processing:', error);
                    });
            }

        },
    },
    mounted() {
        this.handleBodyChange(this.body);
    },
    watch: {
        body(newValue) {
            this.handleBodyChange(newValue);
        }
    },
}
</script>
<style scoped>
.no-data-found-span{
    padding: 10px;
    color: red;
    font-size: 22px;
    font-weight: bold;
}</style>
