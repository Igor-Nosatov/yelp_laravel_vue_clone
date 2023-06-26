<template>
    <div>
      <v-select
        v-if="filters.suggest.length > 8"
        v-model="selectedFilters"
        multiple
        :items="filters.suggest"
        item-text="name"
        item-value="id"
        label="Select Filters"
        chips
        clearable
      ></v-select>
      <v-checkbox
        v-else
        :label="item.name"
        class="suggested-filter"
        v-for="item in filters.suggest"
        :key="item.id"
      ></v-checkbox>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        filters: {
          suggest: [
            { id: 1, name: 'Filter 1' },
            { id: 2, name: 'Filter 2' },
            { id: 3, name: 'Filter 3' },
            { id: 4, name: 'Filter 4' },
            { id: 5, name: 'Filter 5' },
            { id: 6, name: 'Filter 6' },
            { id: 7, name: 'Filter 7' },
            { id: 8, name: 'Filter 8' },
            { id: 9, name: 'Filter 9' },
            { id: 10, name: 'Filter 10' },
            { id: 11, name: 'Filter 11' },
            { id: 12, name: 'Filter 12' },
            // ... add more filters here
          ],
        },
        selectedFilters: [],
      };
    },
  };
  </script>
