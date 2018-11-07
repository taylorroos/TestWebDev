<template>
    <div class="card">
        <div class="card-body">
            <h1> {{ !contact ? 'Cadastrar' : 'Editar'}} Contato</h1>
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
    props: ['contact'],

    data() {
        return {
            form: {
                name: '',
                email: '',
                phone: '',
                cep: '',
                loading: false
            },
            submitButton: this.contact ? 'Salvar' : 'Cadastrar'
        }
    },

    mounted() {
        this.form = {...this.contact}
        
    },
    methods: {
        submitForm () {
            if(this.contact){
                this.form.loading = true
                this.submitButton = 'Salvando...'
                axios.put(`/contatos/${this.form.id}`, this.form)
                .then(response => {
                    swal("Editado!", "Contato editado com sucesso!", "success")
                    .then((value) => {
                        window.location.href="/contatos"
                    });
                })
                .catch(e => {
                    console.error(e)
                })
            }else {
                this.form.loading = true
                this.submitButton = 'Cadastrando...'
                axios.post('/contatos', this.form)
                .then(response => {
                    swal("Cadastrado!", "Contato cadastrado com sucesso!", "success")
                    .then((value) => {
                        window.location.href="/contatos"
                    });
                })
                .catch(e => {
                    console.error(e)
                })
            }
        }
    }
}
</script>

<style lang="scss">

</style>
