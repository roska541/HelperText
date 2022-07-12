<template>
    <div>
        <section class="hero-area overlay" style="background-image: url('https://i.ytimg.com/vi/fD6dEFEkU_c/maxresdefault.jpg');">

            <div class="block">
                <h1>How are you feeling today?</h1>
                <p>Select one of the options to receive a special message to cheer up your day ! </p>
                <div class="row">
                    <div class="col-lg-4">
                        <a @click="getMessages('good');" class="btn btn-transparent smooth-scroll"
                           style="background: #42ff6f61;">
                            Feeling Good! </a>
                    </div>
                    <div class="col-lg-4">
                        <a @click="getMessages('neutral');" class="btn btn-transparent smooth-scroll"
                           style="background: #ffff295e;">
                            Feeling Meh..</a>
                    </div>
                    <div class="col-lg-4">
                        <a @click="getMessages('down');" class="btn btn-transparent smooth-scroll"
                        style="background: #ff00003b;">
                            Feeling down</a>
                    </div>
                </div>
                <br> <br>
                <div class="block" v-if="displayMessage" style="margin-top: 25px;">
                    <article class="col-lg-12"
                             style="visibility: visible; background-color:#78787866;">
                        <div class="service-icon" style="text-align: right;">
                            <p @click="closeMessage()"> <small>X Hide </small>  </p>
                        </div>
                        <div class="service-block text-center">
                            <h3> {{message.data.message}} </h3>
                            <p>  - {{message.data.name}}</p>
                        </div>
                    </article>
                </div>
                <AddMessageComponent></AddMessageComponent>
            </div>
        </section>


    </div>

</template>

<script>
import { BContainer } from 'bootstrap-vue';
import AddMessageComponent from './AddMessageComponent';
export default {

    components: {
        BContainer,
        AddMessageComponent
    },
    name: "Messages",
    data() {
        return {
            message: [],
            displayMessage: false,
        }
    },
    methods: {
        closeMessage(){
            this.displayMessage = false;
        },
        getMessages(slug) {
            this.axios.get('http://127.0.0.1:8000/api/showMessage?slug=' + slug)
                .then(response => {
                    this.displayMessage = true;
                    this.message = response.data;
                });
        }
    }

}
</script>

<style>
@import '/resources/css/app.css';
</style>
