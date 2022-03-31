import axios from "axios";
export default {
  data() {
      return {
        opened:false,
        products: []
      }
  },
  created() {
    let self =this;
    
      axios
          .get(self.$apiUrl + "/api/products/")
          .then(response => {
              this.products = response.data;
              console.log(response.data)
          });

         
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