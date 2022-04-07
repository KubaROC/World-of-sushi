const axios = require("axios");

const options = {
  method: "GET",
  url: "https://purr.objects-us-east-1.dream.io/i/mjzu8336.jpg",
};

axios
  .request(options)
  .then(function (response) {
    console.log(response.data);
  })
  .catch(function (error) {
    console.error(error);
  });
