<template>
    <div>
        <MessagesComponent></MessagesComponent>
    </div>
</template>
<script>
import MessagesComponent from "./components/MessagesComponent";
import AddMessageComponent from "./components/AddMessageComponent";
export default {

    components:{
        MessagesComponent,
        AddMessageComponent
    },
    name: "app"
}
</script>

<style scoped>

</style>
