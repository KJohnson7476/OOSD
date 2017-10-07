<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                tasks:[]
            }

        },

        mounted() {

            axios.get('task').then((response)=>this.tasks=response.data);
            
        }
    }
</script>
