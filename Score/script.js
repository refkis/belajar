function _defineProperty(obj, key, value) {if (key in obj) {Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true });} else {obj[key] = value;}return obj;}
const Table = ReactBootstrap.Table;
const Button = ReactBootstrap.Button;
const Badge = ReactBootstrap.Badge;
class Score extends React.Component {

  constructor(props) {
    super(props);_defineProperty(this, "componentDidMount",





    () => {
      this.get_data();
      setInterval(this.get_data, 10000);
    });_defineProperty(this, "get_data",
    () => {fetch('https://opensheet.vercel.app/1YRtCL1jGjs0O2jNufU7VUNdCNqU6MeJGJFE3Ed1Z5qM/Sheet1').
      then(res => res.json()).
      then(data => {
        this.setState({
          datascore: data });


      });
    });this.state = { datascore: [], tampil: false, jumlah: 0 };}

  render() {
    return /*#__PURE__*/(
      React.createElement("div", { class: "container" }, /*#__PURE__*/
      React.createElement("h1", { class: "text-center" }, "LIVE SCORE GUBERNUR CUP 2021"), /*#__PURE__*/

      React.createElement(Table, { striped: true, bordered: true, hover: true, variant: "dark", size: "sm", className: "mt-3" }, /*#__PURE__*/
      React.createElement("thead", null, /*#__PURE__*/
      React.createElement("tr", null, /*#__PURE__*/
      React.createElement("th", { class: "text-center" }, "No."), /*#__PURE__*/
      React.createElement("th", { class: "text-center" }, "TIM"), /*#__PURE__*/
      React.createElement("th", { class: "text-center" }, "Single"), /*#__PURE__*/
      React.createElement("th", { class: "text-center" }, "Beregu"), /*#__PURE__*/
      React.createElement("th", { class: "text-center" }, "Total "))), /*#__PURE__*/


      React.createElement("tbody", null,
      this.state.datascore.
      sort((a, b) => b.Count - a.Count).
      map((list, index) => /*#__PURE__*/
      React.createElement("tr", null, /*#__PURE__*/
      React.createElement("td", { class: "text-center" }, index + 1), /*#__PURE__*/
      React.createElement("td", null, list.Tim), /*#__PURE__*/
      React.createElement("td", { class: "text-center" }, list.Single), /*#__PURE__*/
      React.createElement("td", { class: "text-center" }, list.Beregu), /*#__PURE__*/
      React.createElement("td", { class: "text-center" }, /*#__PURE__*/React.createElement(Badge, { bg: index + 1 <= 3 ? "warning" : "secondary" }, list.Count)))))), /*#__PURE__*/





      React.createElement("ul", null)));




  }}



ReactDOM.render( /*#__PURE__*/
React.createElement(React.StrictMode, null, /*#__PURE__*/
React.createElement(Score, null)),

document.getElementById('root'));