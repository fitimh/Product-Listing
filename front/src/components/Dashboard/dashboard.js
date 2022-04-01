import axios from "axios";
export default {
  data() {
      return {
        opened:false,
        products: [],
        loading: false,
      };
  },
  // created() {
  //   let self =this;
    
  //     axios
  //         .get(self.$apiUrl + "/api/products/")
  //         .then(response => {
  //             this.products = response.data;
  //             console.log(response.data)

  //          console.log(response.data.products)
  //         });

  // .get("https://jsonplaceholder.typicode.com/users")
  // },
  mounted() {

  }, // qom ncilen faqe o qajo
  methods: {
    fetchProducts() {
      var self =this;
      this.loading = true;
      this.products = [];
      axios
      .get(self.$apiUrl + "/api/products/")
        .then((response) => {
          const data = response.data.products; // [{}, {}]
          this.products = data;
          this.loading = false;
        });
    },
  },

  // methods: {
  //     deleteProduct(id) { 
  //         this.axios
  //             .delete(`http://localhost:8000/api/products/${id}`)
  //             .then(response => {
  //                 let i = this.products.map(data => data.id).indexOf(id);
  //                 this.products.splice(i, 1)
  //             });
  //     }
  // }
}