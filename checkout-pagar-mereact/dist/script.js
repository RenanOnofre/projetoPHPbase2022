class App extends React.Component {
  openCheckout() {
    let checkout = new PagarMeCheckout.Checkout({
      encryption_key: "ENCRYPTION_KEY",
      success: function (data) {
        window.open("../../boleto-bancario/dist/index.php");;
      },
      error: function (err) {
        alert(JSON.stringify(err));
      },
      close: function () {
        alert("The modal has been closed.");

      } });


    checkout.open({
      amount: 8000,
      buttonText: "Pagar",
      customerData: "true",
      createToken: "false",
      paymentMethods: "credit_card, boleto" });

  }

  render() {
    return /*#__PURE__*/React.createElement("button", { onClick: this.openCheckout }, "Pagar o Boleto");
  }}



ReactDOM.render( /*#__PURE__*/React.createElement(App, null), document.getElementById("react-container"));