<template>
  <div class="input-group">
    <input type="text" name="message" id="btn-input" class="form-control input-sm" placeholder="Message" v-model="newMessage" @keyup.enter="sendMessage">

    <span class="input-group-btn">
      <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">Send</button>
    </span>
  </div>
</template>

<script>
  export default {
    props: ['user'],

    data() {
      return {
        newMessage: ''
      }
    },

    methods: {
      sendMessage() {
        this.$emit('messagesent', {
          user: this.user,
          message: this.newMessage
        });
        this.newMessage = ''
      }
    }
  }
</script>
