<template>
  <div>
    <h1>User List</h1>
    <UserCard
        v-for="user in users"
        :key="user.id"
        :user="user"
        @user-selected="selectUser"
    />
  </div>
</template>

<script>
import UserCard from './components/UserCard.vue';

export default {
  components: {
    UserCard
  },
  data() {
    return {
      users: [
        { id: 1, name: 'Nethmi', email: 'neth@example.com' },
        { id: 2, name: 'Umaya', email: 'uma@example.com' }
      ]
    };
  },
  methods: {
    selectUser(user) {
      alert(`Selected user: ${user.name}`);
    }
  }
};
</script>
