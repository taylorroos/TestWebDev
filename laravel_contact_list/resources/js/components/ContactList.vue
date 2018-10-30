<template>
    <div class="container">
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
export default {
    props: ['contacts'],

    data() {
        return {

        }
    }
}
</script>
<style>

</style>