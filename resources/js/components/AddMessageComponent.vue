<template>
    <div>
        <b-button v-b-modal.modal-new-message>Add new Message</b-button>

        <b-modal id="modal-new-message" title="Add new Message" hide-footer>
            <b-form @submit="onSubmit" @reset="onReset">

                <b-form-group id="input-group-3" label="Select a Category" label-for="input-3">
                    <b-form-select
                        id="input-3"
                        class="form-control"
                        v-model="form.category"
                        :options="categories"
                        required
                    ></b-form-select>
                </b-form-group>

                <b-form-group
                    id="input-name"
                    label="Author Name:"
                    label-for="input-1"
                    description="Who made this quote?"
                >
                    <b-form-input
                        id="input-1"
                        v-model="form.name"
                        type="text"
                        placeholder="Enter name of Author of quote"
                        required
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    id="input-name"
                    label="Message:"
                    label-for="input-2"
                    description="Quote Message"
                >
                    <b-form-input
                        id="input-2"
                        v-model="form.message"
                        type="text"
                        placeholder="Enter Quote Message"
                        required
                    ></b-form-input>
                </b-form-group>

                <b-button type="submit" variant="primary">Submit</b-button>
                <b-button type="reset" variant="danger">Reset</b-button>
            </b-form>
        </b-modal>
    </div>
</template>

<script>
export default {
    name: "AddMessageComponent",
    beforeMount(){
        this.getCategories();
    },
    data(){
        return{
            categories: [],
            form: {
                name: '',
                message: '',
                category: 1,
            },
        }
    },
    methods: {
        getCategories(){
            this.axios.get('/api/categories')
                .then(response => {
                    let data = response.data.data;
                    this.categories = data.map(item => ({value: item.id, text: item.name}));
                });
        },

        onSubmit(event){
            event.preventDefault()
            this.axios.post('/api/messages', {
                name: this.form.name,
                category_id : this.form.category,
                message : this.form.message
            })
            .then(response => {
                //Close modal and reset values
                this.$bvModal.hide('modal-new-message')
                this.onReset(event);
            })
            .catch(function (error) {
                console.log(error);
            });
        },
        onReset(event){
            event.preventDefault()
            // Reset our form values
            this.form.name = '';
            this.form.message = '';
            this.form.category = 1;
        }
    }
}
</script>

<style scoped>

</style>
