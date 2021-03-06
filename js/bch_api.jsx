var BitcoinCashApp = React.createClass({
  
 getInitialState: function() {
   return {
     "USD": "",
   }
 },
  
  componentDidMount: function() {

    var th = this;
    this.serverRequest = 
      axios.get(this.props.source)
        .then(function(result) {    
          th.setState({
            USD: result.data.USD
          });
        })
  },
  
  componentWillUnmount: function() {
    this.serverRequest.abort();
  },
  
render: function() {
  return (
    <div className="text-center">
       <badge className="badge badge-pill badge-success p-2">1 BCH = ${this.state.USD} (USD)</badge>
    </div>
  )
 }
});

ReactDOM.render(<BitcoinCashApp source="https://min-api.cryptocompare.com/data/price?fsym=BCH&tsyms=USD&e=Coinbase" />, document.querySelector("#bchPrice"));