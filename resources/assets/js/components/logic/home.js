export default {

    data() {
        return {
            tasks:[],
            loading:false,
            editForm:"",
            taskEditData:{name:'', body:''}
        }
    },
    methods:{
        editTask(taskId) {
            this.tasks.forEach((task,i)=>{
                if (task.id == taskId) {
                    this.taskEditData=task;
                }
            });


            return this.editForm = taskId;
        },
        showForm(taskId) {
            if (this.editForm == taskId) {
                return true;
            }
            return false;
        },
        updateIt(taskId) {
            axios.put('task/' + taskId, this.taskEditData)
                .then(response=>{
                    console.log(response);
                    this.editForm=false;
                    this.taskEditData="";
                    this.$router.push('/');
                })
                .catch(error=>{
                    console.log(error.response);
                })
        },
        deleteIt(taskId) {
            let ok=confirm("Delete Task?");
            if (ok) {
                axios.delete('task/' + taskId).then(response=>{
                    console.log(response);
                    this.fetchIt();
                });
            }
        },
        fetchIt() {
            this.loading = true;

            axios.get('task').then((response)=>{this.tasks=response.data, this.loading = false});
        }
    },
    mounted() {
        this.fetchIt();
    }
}