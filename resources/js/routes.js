import MessagesComponent from "./components/MessagesComponent";
import AddMessageComponent from "./components/AddMessageComponent";
export const routes = [
    {
        path: '/messages',
        component: MessagesComponent,
        name : 'MessagesComponent'
    },
    {
        path: '/AddNewMessage',
        component: AddMessageComponent,
        name: 'AddNewMessage',
    }
]
