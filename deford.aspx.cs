using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;


namespace WebLogin
{
    public partial class deford : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void BtnLogin_Click(object sender, EventArgs e)
        {
            //宣告共用函數類別
            PublicFunction pf = new PublicFunction();
            //建立DataTable變數，用來接收查詢結果
            DataTable dt;
            //查詢使用者帳號與密碼是否正確
            dt = pf.GetDataTable(string.Format(
                "SELECT CompanyName " +
                "FROM Customer " +
                "WHERE CustomerID = '{0}' " +
                "AND hashbytes('md5', PasswordCode) = hashbytes('md5', '{1}')",
                txtCustomerID.Text.ToUpper().Trim(),
                txtPasswordCode.Text.ToUpper().Trim()));
            if (dt.Rows.Count > 0)
            {
                //帳號與密碼是正確
                Session["CustomerID"] = txtCustomerID.Text.ToUpper().Trim();
                Session["CompanyName"] = (string)(dt.Rows[0]["CompanyName"]);
                Session["IsLogin"] = true;
                //移至訂單維護的網頁
                Response.Redirect(string.Format("~/TxnOrders.aspx?CustomerID={0}", Session["CustomerID"]));
            }
            else
            {
                //帳號或密碼，顯示錯誤訊息。
                ClientScript.RegisterStartupScript(this.GetType(), "OnLoad",
                    "<script type='text/javascript'>alert('登入帳號或密碼錯誤。');</script>");
            }
        }
    }
}