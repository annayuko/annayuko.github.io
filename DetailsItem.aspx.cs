using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class DetailsItem : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void Button1_Click(object sender, EventArgs e)
    {
        string productID = Request.QueryString["Id"]; // 取得產品號
        // 建立Cookie儲存選購商品
        if (Request.Cookies["Product_specifications" + productID] != null)
        {
            // 存在, 更新數量
            int quantity = Convert.ToInt32(Request.Cookies["Product_specifications" + productID]["Quantity"]);
            Response.Cookies["Product_specifications" + productID]["ID"] = productID;

            Response.Cookies["Product_specifications" + productID]["Quantity"] = quantity.ToString();
        }
        else
        {
            // 不存在, 建立新Cookie
            Response.Cookies["Product_specifications" + productID]["ID"] = productID;

        }
        Response.Cookies["Product_specifications" + productID].Expires = DateTime.Today.AddDays(10);
        Response.Redirect("ShoppingCart.aspx"); // 轉址至購物車
    }
}