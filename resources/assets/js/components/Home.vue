<template>
    <div class="container">
        <div class="row pull-right">
            <router-link to="/create" tag="li">
                <a class="btn btn-primary">New Task</a>
            </router-link>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div v-if="loading">loading...</div>
                <div class="panel panel-default" v-for = "task in tasks">
                    <div class="panel-heading"> {{ task.name }}: Assigned by {{ task.user.name }} </div>

                    <div class="panel-body">
                        {{ task.body }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                tasks:[],
                loading:false
            }

        },

        mounted() {

            this.loading = true;

            axios.get('task').then((response)=>{this.tasks=response.data, this.loading = false});
            
        }
    }
</script>
