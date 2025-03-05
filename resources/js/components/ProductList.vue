<template>
  <div class="product-list">
    <h1 class="page-title">Product List</h1>
    <div class="product-grid">
      <div v-for="product in products" :key="product.id" class="product-card">
        <router-link :to="'/products/' + product.id">
          <h3 class="product-title">{{ product.title }}</h3>
          <p class="product-description">{{ product.description.substring(0, 80) }}...</p>
          <p class="product-price">${{ product.price }}</p>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return { products: [] };
  },
  mounted() {
    axios.get('/api/products')
      .then(response => {
        this.products = response.data.products;
      })
      .catch(error => {
        console.error('There was an error fetching the products:', error);
      });
  }
};
</script>

<style scoped>
.page-title {
  font-size: 2rem;
  text-align: center;
  margin-bottom: 1.5rem;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 1rem;
  padding: 0 2rem;
}

.product-card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}

.product-title {
  font-size: 1.25rem;
  font-weight: bold;
  margin: 1rem;
}

.product-description {
  font-size: 1rem;
  color: #666;
  margin: 0 1rem;
}

.product-price {
  font-size: 1.2rem;
  color: #2e8b57;
  margin: 0 1rem 1rem;
}
</style>
