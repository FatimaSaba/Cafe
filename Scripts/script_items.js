
var dict = {
  flatWhite: 0,
  macchiato: 0,
  cafemocha: 0,
  espresso: 0,
  capppuccino: 0,
  americano: 0,
  irishCoffee: 0,
  coldCoffeeWithIceCream: 0,
  latte: 0,
  frappe: 0,
};
  
 
function checkIfThereIsItems(){

    if(dict.flatWhite != 0 || 
        dict.macchiato != 0 ||
        dict.cafemocha != 0 ||
        dict.espresso != 0 ||
        dict.capppuccino != 0 ||
        dict.americano != 0 ||
        dict.irishCoffee != 0 ||
        dict.coldCoffeeWithIceCream != 0 ||
        dict.latte != 0 ||
        dict.frappe != 0 )
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

function changeValueForItem(item, value){
    document.getElementById(item).value = value; 
}

function addItem (item)
{
    dict[item] = dict[item] + 1;//work add product 
    document.getElementById(`${item}_display`).innerHTML = dict[item];// display on the screen
    changeValueForItem(item, dict[item]); //change values
    unhideOrHideElement("checkoutbutton",checkIfThereIsItems());  // work as hiddencheckout button when there is no products got selected
}
function subItem (item){//function for minus value
    if(dict[item] == 0){// if there is no products then it shows 0 or hide the chcekout button
        return;
    }//

    dict[item] = dict[item] - 1;//  work minus item
    document.getElementById(`${item}_display`).innerHTML = dict[item];
    changeValueForItem(item,dict[item]); //display on the sceen each item
    unhideOrHideElement("checkoutbutton",checkIfThereIsItems());//hide and unhide checkout button
}