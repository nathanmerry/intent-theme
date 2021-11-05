import { sendContactForm } from "../service";

window.ContactForm = function() {
  return {
    fields: {
      firstName: "",
      lastName: "",
      email: "",
      phone: "",
      company: "",
      message: "",
      nonce: null,
    },

    buttonText: 'SEND MESSAGE',
    loading: false,
    responseMessage: "",

    async onClickSubmitForm(event) {
      event.preventDefault();

      this.loading = true;

      const response = await sendContactForm(this.fields);    

      if (response.ok) {
        this.responseMessage = "Your inquiry has been sent. Please expect a reponse in the coming days.";
        
        this.fields = {
          firstName: "",
          lastName: "",
          email: "",
          phone: "",
          company: "",
          message: "",
          nonce: null,
        };
      } else {
        this.responseMessage = "Your inquiry could not be sent. Please ensure your details are correct."
      }

      this.loading = false;
    },
  };
};
