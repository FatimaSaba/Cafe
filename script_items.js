
var dict = {
    flatWhite: 0,
    macchiato: 0,
    cafemocha:0,
    Espresso: 0,
    Capppuccino: 0,
    americano: 0,
    IrishCoffee: 0,
    ColdCoffeewithIceCream: 0,
    Latte: 0,
    Frappe: 0,
  };
  
 

  function addItem (item){

    dict[item] = dict[item] + 1;
    console.table(dict);
}
 function subItem (item){

    dict[item] = dict[item] - 1;
    console.table(dict);
}