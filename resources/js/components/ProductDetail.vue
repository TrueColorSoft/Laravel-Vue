<template>
  <div v-if="product" class="product-detail">
    <router-link to="/" class="back-button">Back to Product List</router-link>
    <h1 class="product-title">{{ product.title }}</h1>
    <div class="product-info">
      <div class="product-description">
        <p>{{ product.description }}</p>
        <p class="product-price">Original Price: ${{ product.price }}</p>
        <p class="final-price">Final Price: ${{ finalPrice }}</p>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return { product: null, finalPrice: 0 };
  },
  mounted() {
    axios.get('/api/products/' + this.$route.params.id).then(response => {
      this.product = response.data.product;
      this.finalPrice = response.data.final_price;
    });
  }
};
</script>

<style scoped>
.product-title {
  font-size: 2rem;
  font-weight: bold;
  text-align: center;
  margin-top: 1.5rem;
}

.product-info {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 2rem;
}

.product-description {
  max-width: 500px;
}

.product-description p {
  font-size: 1.1rem;
  line-height: 1.6;
}

.product-price,
.final-price {
  font-size: 1.2rem;
  font-weight: bold;
}

.product-price {
  text-decoration: line-through;
  color: #888;
}

.final-price {
  color: #2e8b57;
}

.back-button {
  display: inline-block;
  margin: 1rem 0;
  padding: 0.5rem 1rem;
  background-color: #2e8b57;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-size: 1rem;
}

.back-button:hover {
  background-color: #3c9a6b;
}

@media (max-width: 768px) {
  .product-info {
    flex-direction: column;
    align-items: center;
  }
}
</style>
