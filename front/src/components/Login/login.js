import axios from "axios";
import Swal from "sweetalert2";

export default {
  data() {
    return {
      form: {

        email: "",
        password: "",
      }
    };
  },

  methods: {
    //user register function and api call
    login_user() {
      let self = this;

      const newLocal = "/api/auth/login";

      
      axios
        .post(self.$apiUrl + newLocal, this.form)
        .then((response) => {
          //reset form after submission
          self.form.email = "";
          self.form.password = "";

          //success message alert
          Swal.fire({
            title: "Success!",
            text: "Login has been successfully",
            icon: "success",
          });
       
          return response;
        
        })
        .catch((e) => {
          let text =
            e.response.data.errors.email ||
            e.response.data.errors.password ||
            console.log(e.response);
          Swal.fire({ title: "Error Credit", text: text, icon: "warning" });
        });
    },
  },
};
