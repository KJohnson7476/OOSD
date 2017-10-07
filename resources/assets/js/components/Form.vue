<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <form @submit.prevent="addTask">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Name of Task" v-model="taskData.name"/>
                        <span class="text-danger">{{ errors.name?errors.name[0]:"" }}</span>
                    </div>

                    <div class="form-group">
                        <label for="">Body</label>
                        <input type="text" class="form-control" id="" placeholder="Input field" v-model="taskData.body"/>
                        <span class="text-danger">{{ errors.body?errors.body[0]:"" }}</span>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                taskData:{
                    name:'',
                    body:''
                },
                errors:{}
            }
        },
        methods:{
            addTask() {
                axios.post('task', this.taskData)
                    .then(response=>{
                        console.log(response)
                        this.taskData = "";
                        this.errors="";
                        this.$router.push('/');
                    })
                    .catch(error=>{
                    console.log(error.response);
                    this.errors=error.response.data;
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>