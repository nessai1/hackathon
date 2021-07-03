<template>
    <div>
        <form action="#" class="align-baseline ">
            <div class="form-row">
                <input type="text" v-model="formData.login">
            </div>
            <div class="form-row">
                <input type="password" v-model="formData.password">
            </div>
            <div class="form-row">
                <button type="submit">Sign In</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            formData: {
                password: '',
                login: '',
            },
        }
    }
}
</script>
