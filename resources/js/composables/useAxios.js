import { ref } from 'vue';
import axios from 'axios';

const axiosInstance  = axios.create({
    baseURL: 'https://dashboard.ctpse.info/api', // 'http://localhost:8000/api', https://dashboard.ctpse.info/api
    withCredentials: true,
    xsrfHeaderName: "X-XSRF-TOKEN",
});

export default function useAxios() {
    const loading = ref(false);
    const error = ref(null);

    const sendRequest = async (config) => {
        loading.value = true;
        error.value = null;
        try {
            const response = await axiosInstance(config);
            return response;
        } catch (err) {
            error.value = err.response ? err.response.data : err.message;
            throw err;
        } finally {
            loading.value = false;
        }
    };

    return {
        loading,
        error,
        sendRequest,
    };
}