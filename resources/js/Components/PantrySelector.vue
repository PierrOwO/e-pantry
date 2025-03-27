<script setup>
import Button from '@/Components/Button.vue';
</script>
<template>
    <div class="selector">
        <div v-if="pantries.length === 0" class="content">
            <Button class="margin-top-10px background-color-maroon-hoverable" label="Create new pantry" />
        </div>
        <div v-else class="content">
            <span class="margin-bottom-5px">Select pantry first</span>
            <select class="background-color-maroon">
                <option v-for="(row, index) in pantries" :key="row.id">
                    {{ row.name }}
                </option>
            </select>
            <Button class="margin-top-30px background-color-maroon-hoverable" label="Select this pantry" />
            <span >Or</span>
            <Button class="background-color-maroon-hoverable" label="Create new pantry" />
        </div>
    </div>
</template>


<script>
export default {
    data() {
        return {
            pantries: [],
            dataDownloaded: false,
        };
    },
    methods:{
        getPantries(){
            if(!this.dataDownloaded){
                axios.get('/api/pantries')
                    .then(response => {
                        this.pantries = response.data;
                        this.dataDownloaded = true;
                    })
                    .catch(error => {
                        console.error('Error while processing:', error);
                    });
            }

        },
    },
    mounted(){
        this.getPantries();
    }
}
</script>

  <style scoped>
  .selector {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: auto;
    background-color: #FFB4B4;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
  }
  .selector .content{
    padding-top: 30px;
    padding-bottom:40px;
    width: 80%;
    height: 80%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .background-color-maroon{
    background-color: #85586F;
    color: white;
}
.background-color-maroon-hoverable{
    background-color: #85586F;
    color: white;
}
.background-color-maroon-hoverable:hover{
    background-color: rgb(98, 47, 74);
}
.background-color-maroon:focus{
    background-color: rgb(98, 47, 74);
}
span {
    font-size: 20px;
    color: white;
    font-weight: bold;
}
.margin-bottom-5px{
    margin-bottom: 5px;
}
.margin-top-10px{
    margin-top: 10px;
}
.margin-top-30px{
    margin-top: 30px;
}
select{
    background-color: #85586F;
    border-radius: 4px;
    height: 50px;
    width: 100%;
}
</style>
