<template>
    <div class="container">
        <div>
            <form @submit.prevent="submitForm">
                <input type="text" v-model="form.name" placeholder="Nome" required>
                <input type="email" v-model="form.email" placeholder="E-mail" required>
                <input type="tel" v-model="form.phone" placeholder="Telefone" required>
                <input type="text" v-model="form.cep" placeholder="CEP" required>
                <button>Adicionar</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>TELEFONE</th>
                    <th>CEP</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(contact, index) in contacts " :key="index">
                    <td>{{contact.id}}</td>
                    <td>{{contact.name}}</td>
                    <td>{{contact.email}}</td>
                    <td>{{contact.phone}}</td>
                    <td>{{contact.cep}}</td>
                </tr>
            </tbody>
        </table>
    </div>    
</template>
<script>
import axios from "axios";
export default {
    props: ['contacts'],

    data() {
        return {
            form: {
                name: '',
                email: '',
                phone: '',
                cep: '',
                loading: false
            },
            submitButton: 'Cadastrar'
        }
    },

    methods: {
        submitForm () {
            this.form.loading = true
            this.submitButton = 'Cadastrando...'
            axios.post('contatos', this.form)
            .then(response => {
                this.resetForm()
            })
            .catch(e => {
                console.error(e)
            })
            .finally(() => {
                this.submitButton = 'Cadastrar'
                this.form.loading = false
            })
        },
        resetForm() {
            this.form = {
                name: '',
                email: '',
                phone: '',
                cep: '',
                loading: false
            }
        }
    }
}
</script>
<style>
</style>