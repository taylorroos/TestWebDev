<template>
    <div class="card">
        <div class="card-body">
            <h1>Cadastrar Contato</h1>
            <form @submit.prevent="submitForm">
                <input type="text" v-model="form.name" class="form-control" placeholder="Nome" required>
                <input type="email" v-model="form.email" class="form-control" placeholder="E-mail" required>
                <input type="tel" v-model="form.phone" class="form-control" placeholder="Telefone" required>
                <input type="text" v-model="form.cep" class="form-control" placeholder="CEP" required>
                <button class="btn btn-success">
                    <i class="fa fa-plus"></i> {{submitButton}}
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
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
            axios.post('/contatos', this.form)
            .then(response => {
                window.location.href="/contatos"
            })
            .catch(e => {
                console.error(e)
            })
            .finally(() => {
                this.submitButton = 'Cadastrar'
                this.form.loading = false
            })
        }
    }
}
</script>

<style lang="scss">

</style>
