
export default {
    data() {
      return {
        form: {
          email: "",
          password: "",
        },
      };
    },
  
    methods: {
      //user register function and api call
      login_user() {
        let self = this;
  
        axios
          .post(self.$apiUrl + "/api/auth/login", this.form)
          .then((response) => {
            //reset form after submission
    
            
            this.form.email = "";
            this.form.password = "";
        
  
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
  