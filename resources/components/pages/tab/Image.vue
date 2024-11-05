<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const successMessage = 'アップロードに成功しました';
const errorMessage = 'アップロードに失敗しました';

const fileData = ref(null);
const message = ref('');
const images = ref([]);

const getImageData = async () => {
    // 画像ファイル取得用のAPI実行
    try {
        const res = await axios.get('/api/image/get');
        images.value = res?.data?.map((data) => data.file_path);
    } catch (error) {
        //
    }
};

const submit = async () => {
    // 画像ファイルアップロード用のAPI実行
    try {
        // multipart/form-data形式で送信するためFormDataを使用するらしい(appendで追加)
        const formData = new FormData();
        formData.append('file', fileData.value);

        const res = await axios.post('/api/image/upload', formData);

        if (res.data.message === 'ok') {
            message.value = successMessage
            getImageData();
        } else {
            message.value = errorMessage;
        }
    } catch (error) {
        message.value = errorMessage;
    }
};

onMounted(() => {
    getImageData();
});
</script>

<template>
    <div>
        <h2>Image</h2>
    </div>
    <input type="file" name="imageUp" accept="image/jpeg, image/png"
    @change="fileData = $event.target.files[0]">
    <button type="button" @click="submit">submit</button>

    <p>{{ message }}</p>

    <div v-if="images?.length">
        <div v-for="image in images" :key="image">
            <img style="width: 100px; height: 100px;" :src="image" alt="image">
        </div>
    </div>
    <div v-else>
        <p>画像がありません</p>
    </div>
</template>
