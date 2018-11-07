<template>
    <div class="card">
        <div class="card-body">
            <h1>Contatos</h1>
            <a :href="`${baseUrl}create`">
                <button class="btn btn-success mb-3"><i class="fa fa-plus"></i>  Cadastrar</button>
            </a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>E-MAIL</th>
                        <th>TELEFONE</th>
                        <th>CEP</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(contact, index) in contacts " :key="index">
                        <td>{{contact.id}}</td>
                        <td>{{contact.name}}</td>
                        <td>{{contact.email}}</td>
                        <td>{{contact.phone}}</td>
                        <td>{{contact.cep}}</td>
                        <td>
                            <a :href="`${baseUrl}${contact.id}/edit`">
                                <button class="btn btn-info"><i class="fa fa-pen"></i></button>
                            </a>
                            <button class="btn btn-danger" @click="handleDelete(contact.id)"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
</template>
<script>
import axios from "axios";
import swal from 'sweetalert';

export default {
    props: ['contacts'],

    computed: {
        baseUrl() {
            const base = window.location.href;
            if(base.charAt(base.length-1) == '/'){
                return base;
            }else {
                return base+'/';
            }
        }
    },
    
    methods: {
        handleDelete(id) {
            axios.delete(`${this.baseUrl}${id}`).then(response => {
                if(response.status == 200 || response.status == 201){
                    swal("Deletado!", "Contato deletado com sucesso!", "success")
                    .then((value) => {
                        window.location.reload();
                    });
                }
            })
        }
    }
}
</script>
<style>
</style>