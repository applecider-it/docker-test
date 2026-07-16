<script setup lang="ts">
/** vueテスト用コンポーネント */

interface Props {
  testValue?: number;
}

defineProps<Props>();

const blockStyle = 'border-gray-400 border-2 p-3';
</script>

<template>
  <div class="py-6 border-gray-500 border-2 p-5">
    <div class="mb-6 text-lg">vue.js動作確認</div>

    <div class="space-y-4">
      <div :class="blockStyle">
        testValue: {{ testValue }}
      </div>
    </div>
  </div>
</template>
