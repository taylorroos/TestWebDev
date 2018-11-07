<template>
    <div class="card">
        <div class="card-body">
            <h1>Contatos</h1>
            <a href="contatos/create">
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
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
</template>
<script>
import axios from "axios";
export default {
    props: ['contacts'],
}
</script>
<style>
</style>