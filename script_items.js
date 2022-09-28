
var dict = {
  flatWhite: 0,
  macchiato: 0,
  cafemocha: 0,
  Espresso: 0,
  Capppuccino: 0,
  americano: 0,
  IrishCoffee: 0,
  ColdCoffeewithIceCream: 0,
  Latte: 0,
  Frappe: 0,
};
  
 
function checkIfThereIsItems(){

    if(dict.flatWhite != 0 || 
        dict.macchiato != 0 ||
        dict.cafemocha != 0 ||
        dict.Espresso != 0 ||
        dict.Capppuccino != 0 ||
        dict.americano != 0 ||
        dict.IrishCoffee != 0 ||
        dict.ColdCoffeewithIceCream != 0 ||
        dict.Latte != 0 ||
        dict.Frappe != 0 )
    {
        return true;
    }

    return false;
}

function unhideOrHideElement(selector, hide){
    let elem = document.getElementById(selector);

    if(hide)
    {
        elem.style.display = '';
    }else
    {
        elem.style.display = 'none';
    }
}

function changeValueForItem(item,value){
    document.getElementById(item).value = value; 
}

function addItem (item)
{
    dict[item] = dict[item] + 1;
    console.table(dict);
    document.getElementById(`${item}_display`).innerHTML = dict[item];
    changeValueForItem(item,dict[item]);
    unhideOrHideElement("checkoutbutton",checkIfThereIsItems()); 
}
function subItem (item){
    if(dict[item] == 0){
        return;
    }

    dict[item] = dict[item] - 1;
    console.table(dict);
    document.getElementById(`${item}_display`).innerHTML = dict[item];
    unhideOrHideElement("checkoutbutton",checkIfThereIsItems());
}