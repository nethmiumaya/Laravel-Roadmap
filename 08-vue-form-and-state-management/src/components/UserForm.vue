<template>
  <div style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
    <h2 style="text-align: center; color: #333; margin-bottom: 20px;">User Form</h2>
    <form @submit.prevent="handleSubmit" style="display: flex; flex-direction: column; gap: 15px;">
      <label style="display: flex; flex-direction: column; font-size: 14px; color: #555;">
        First Name:
        <input v-model="firstName" type="text" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
      </label>
      <label style="display: flex; flex-direction: column; font-size: 14px; color: #555;">
        Last Name:
        <input v-model="lastName" type="text" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
      </label>
      <button type="submit" style="padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 4px; font-size: 14px; cursor: pointer; transition: background-color 0.3s;">
        Submit
      </button>
    </form>

    <p v-if="submittedFullName" style="margin-top: 20px; text-align: center; color: #333; font-size: 16px;">👋 Hello, {{ submittedFullName }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      firstName: '',
      lastName: '',
      submittedFullName: ''
    };
  },
  computed: {
    fullName() {
      return `${this.firstName} ${this.lastName}`;
    }
  },
  methods: {
    handleSubmit() {
      this.submittedFullName = this.fullName;
      alert(`Submitted: ${this.fullName}`);
    }
  }
};
</script>