<%@ Page Title="" Language="C#" MasterPageFile="~/MyShop.master" AutoEventWireup="true" Inherits="DetailsItem" Codebehind="DetailsItem.aspx.cs" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    </asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="MainContent" Runat="Server">
    <div>
       <table class="style4">
           <tr>
               <td>
                   &nbsp;</td>
             <td>
                   <asp:Button ID="Button1" runat="server" Text="查詢規格" onclick="Button1_Click" />
               </td>
           </tr>
       </table>
          <asp:DetailsView ID="DetailsView1" runat="server" AutoGenerateRows="False" 
            CellPadding="2" DataKeyNames="ProductID" DataSourceID="SqlDataSource1" 
            ForeColor="Black" GridLines="None" Height="50px" Width="450px" 
           BackColor="LightGoldenrodYellow" BorderColor="Tan" BorderWidth="1px" >
            <PagerStyle ForeColor="DarkSlateBlue" 
                HorizontalAlign="Center" />
            <Fields>
                <asp:BoundField DataField="ProductID" HeaderText="商品編碼" ReadOnly="True" 
                    SortExpression="ProductID" />
                <asp:BoundField DataField="CategoryName" HeaderText="商品名稱" 
                    SortExpression="CategoryName" ReadOnly="True" />
                <asp:BoundField DataField="ItemCode" HeaderText="商品代碼" 
                    SortExpression="ItemCode" ReadOnly="True" />
                <asp:BoundField DataField="Price" HeaderText="價錢" 
                    SortExpression="Price"  ReadOnly="True" />
                <asp:ImageField DataImageUrlField="ProductID" 
                    DataImageUrlFormatString="~/images/{0}.JPG" HeaderText="圖片" ReadOnly="True">
                </asp:ImageField>
            </Fields>
            <HeaderStyle Font-Bold="True" />
            <EditRowStyle ForeColor="GhostWhite" />
            <AlternatingRowStyle BackColor="#FFFFCC" Font-Bold="False" />
              <RowStyle BackColor="#FF6699" />
        </asp:DetailsView>
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
               ConnectionString="Data Source=DESKTOP-VD3B4I4;Initial Catalog=&quot;Battery Ordering&quot;;User ID=sa;Password=sa123456!@#"  
            SelectCommand="SELECT * FROM [Product_specifications] WHERE ([ProductID] = @ProductID)">
            <SelectParameters>
                <asp:QueryStringParameter Name="ProductID" QueryStringField="Id" Type="String" />
            </SelectParameters>
        </asp:SqlDataSource>        
   </div>  
          <input type ="button" onclick="history.back()" value="回到上一頁"></input>
</asp:Content>


