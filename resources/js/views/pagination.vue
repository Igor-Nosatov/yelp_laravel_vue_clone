<template>
    <div>
      <ul>
        <li v-for="item in displayedItems" :key="item.id">{{ item.name }}</li>
      </ul>
      <div class="pagination">
        <button @click="prevPage" :disabled="currentPage === 1">Prev</button>
        <div v-if="showStartGap">
          <button @click="gotoPage(1)">1</button>
          <span>...</span>
        </div>
        <div v-for="page in visiblePages" :key="page">
          <button :key="page" @click="gotoPage(page)" :class="{ active: currentPage === page }">{{ page }}</button>
        </div>
        <div v-if="showEndGap">
          <span>...</span>
          <button @click="gotoPage(totalPages)">{{ totalPages }}</button>
        </div>
        <button @click="nextPage" :disabled="currentPage === totalPages">Next</button>
      </div>
    </div>
  </template>

  <script>
  import { reactive, computed } from 'vue';

  export default {
    data() {
      return {
        items: [
          { id: 1, name: 'Item 1' },
          { id: 2, name: 'Item 2' },
          { id: 3, name: 'Item 3' },
          { id: 4, name: 'Item 4' },
          { id: 5, name: 'Item 5' },
          { id: 6, name: 'Item 6' },
          { id: 7, name: 'Item 7' },
          { id: 8, name: 'Item 8' },
          { id: 9, name: 'Item 9' },
          { id: 10, name: 'Item 10' },
          { id: 11, name: 'Item 1' },
          { id: 12, name: 'Item 2' },
          { id: 13, name: 'Item 3' },
          { id: 14, name: 'Item 4' },
          { id: 15, name: 'Item 5' },
          { id: 16, name: 'Item 6' },
          { id: 17, name: 'Item 7' },
          { id: 18, name: 'Item 8' },
          { id: 19, name: 'Item 9' },
          { id: 20, name: 'Item 10' },
          { id: 21, name: 'Item 1' },
          { id: 22, name: 'Item 2' },
          { id: 23, name: 'Item 3' },
          { id: 24, name: 'Item 4' },
          { id: 25, name: 'Item 5' },
          { id: 26, name: 'Item 6' },
          { id: 27, name: 'Item 7' },
          { id: 28, name: 'Item 8' },
          { id: 29, name: 'Item 9' },
          { id: 30, name: 'Item 10' },
          { id: 31, name: 'Item 1' },
          { id: 32, name: 'Item 2' },
          { id: 33, name: 'Item 3' },
          { id: 34, name: 'Item 4' },
          { id: 35, name: 'Item 5' },
          { id: 36, name: 'Item 6' },
          { id: 37, name: 'Item 7' },
          { id: 38, name: 'Item 8' },
          { id: 39, name: 'Item 9' },
          { id: 40, name: 'Item 10' },
          { id: 41, name: 'Item 1' },
          { id: 42, name: 'Item 2' },
          { id: 43, name: 'Item 3' },
          { id: 44, name: 'Item 4' },
          { id: 45, name: 'Item 5' },
          { id: 46, name: 'Item 6' },
          { id: 47, name: 'Item 7' },
          { id: 48, name: 'Item 8' },
          { id: 49, name: 'Item 9' },
          { id: 50, name: 'Item 10' },
          // ... add more items here
        ],
        itemsPerPage: 3,
        currentPage: 1,
      };
    },
    computed: {
      displayedItems() {
        const startIndex = (this.currentPage - 1) * this.itemsPerPage;
        const endIndex = startIndex + this.itemsPerPage;
        return this.items.slice(startIndex, endIndex);
      },
      totalPages() {
        return Math.ceil(this.items.length / this.itemsPerPage);
      },
      visiblePages() {
        const range = 2; // Number of page buttons to show on each side of the current page
        const startPage = Math.max(this.currentPage - range, 1);
        const endPage = Math.min(this.currentPage + range, this.totalPages);
        return Array.from({ length: endPage - startPage + 1 }, (_, i) => startPage + i);
      },
      showStartGap() {
        return this.visiblePages[0] > 2;
      },
      showEndGap() {
        return this.visiblePages[this.visiblePages.length - 1] < this.totalPages - 1;
      },
    },
    methods: {
      prevPage() {
        if (this.currentPage > 1) {
          this.currentPage--;
        }
      },
      nextPage() {
        if (this.currentPage < this.totalPages) {
          this.currentPage++;
        }
      },
      gotoPage(page) {
        this.currentPage = page;
      },
    },
  };
  </script>

  <style>
  .pagination {
    margin-top: 10px;
  }

  .pagination button {
    margin-right: 5px;
  }

  .pagination .active {
    font-weight: bold;
  }
  </style>
