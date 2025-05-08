<template>
  <div class="user-card" @click="handleClick">
    <h3>{{ user.name }}</h3>
    <p>{{ user.email }}</p>
  </div>
</template>

<script>
export default {
  name: 'UserCard',
  props: {
    user: Object
  },
  methods: {
    handleClick() {
      this.$emit('user-selected', this.user);
    }
  }
};
</script>

<style scoped>
.user-card {
  border: 1px solid #ccc;
  padding: 1rem;
  margin: 0.5rem;
  cursor: pointer;
}
</style>
