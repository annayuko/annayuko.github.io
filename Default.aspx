<%@ Page Title="" Language="C#" MasterPageFile="~/MyShop.master" AutoEventWireup="true" Inherits="_Default" Codebehind="Default.aspx.cs" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="MainContent" Runat="Server">
        <asp:DropDownList ID="DropDownList1" runat="server" 
            DataSourceID="SqlDataSource1" DataTextField="CategoryName" 
            DataValueField="CategoryName" AutoPostBack="True" Font-Size="Medium" 
        Height="22px" Width="145px">
        </asp:DropDownList>
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
              ConnectionString="Data Source=DESKTOP-VD3B4I4;Initial Catalog=&quot;Battery Ordering&quot;;User ID=sa;Password=sa123456!@#"
            SelectCommand="SELECT DISTINCT [CategoryName] FROM [Product_specifications]"></asp:SqlDataSource>
                     <asp:ListView ID="ListView1" runat="server" 
            DataSourceID="SqlDataSource2" GroupItemCount="2">
                         <AlternatingItemTemplate>
                             <td id="Td1" runat="server" style="background-color:#FFF8DC;">
                                 <table class="style5">
                                         <tr>
                                             <td>
                                                 商品編碼:
                                                 <asp:HyperLink ID="HyperLink1" runat="server" 
                                                     NavigateUrl='<%# Eval("ProductID", "DetailsItem.aspx?Id={0}") %>' 
                                                     Text='<%# Eval("ProductID") %>'></asp:HyperLink>
                                                 <br />
                                                 商品代碼:
                                                 <asp:Label ID="ItemCodeLabel" runat="server" Text='<%# Eval("ItemCode") %>'></asp:Label>
                                                 <br />
                                             </td>
                                         </tr>
                                     </table>
                             </td>
                         </AlternatingItemTemplate>
                         <LayoutTemplate>
                             <table id="Table1" runat="server">
                                 <tr id="Tr1" runat="server">
                                     <td id="Td2" runat="server">
                                         <table ID="groupPlaceholderContainer" runat="server" border="1" 
                                             style="background-color: #FFFFFF;border-collapse: collapse;border-color: #999999;border-style:none;border-width:1px;font-family: Verdana, Arial, Helvetica, sans-serif;">
                                             <tr ID="groupPlaceholder" runat="server">
                                             </tr>
                                         </table>
                                     </td>
                                 </tr>
                                 <tr id="Tr2" runat="server">
                                     <td id="Td3" runat="server" 
                                         style="text-align: center;background-color: #CCCCCC;font-family: Verdana, Arial, Helvetica, sans-serif;color: #000000;">
                                         <asp:DataPager ID="DataPager1" runat="server" PageSize="12">
                                             <Fields>
                                                 <asp:NextPreviousPagerField ButtonType="Button" ShowFirstPageButton="True" 
                                                     ShowLastPageButton="True" />
                                             </Fields>
                                         </asp:DataPager>
                                     </td>
                                 </tr>
                             </table>
                         </LayoutTemplate>
                         <EmptyItemTemplate>
                             <td id="Td4" runat="server" />
                             </EmptyItemTemplate>
                             <InsertItemTemplate>
                                 <td id="Td5" runat="server" style="">
                                    ItemCode:
                                     <asp:TextBox ID="ItemCodeTextBox" runat="server" 
                                         Text='<%# Bind("ItemCode") %>' />
                                     <br />
                                     <asp:Button ID="InsertButton" runat="server" CommandName="Insert" Text="插入" />
                                     <br />
                                     <asp:Button ID="CancelButton" runat="server" CommandName="Cancel" Text="清除" />
                                     <br />
                                 </td>
                             </InsertItemTemplate>
                             <SelectedItemTemplate>
                                 <td id="Td6" runat="server" 
                                     style="background-color:#008A8C;font-weight: bold;color: #FFFFFF;">
                                    ItemCode:
                                     <asp:Label ID="Label1" runat="server" Text='<%# Eval("ItemCode") %>' />
                                     <br />
                                 </td>
                             </SelectedItemTemplate>
                             <GroupTemplate>
                                 <tr ID="itemPlaceholderContainer" runat="server">
                                     <td ID="itemPlaceholder" runat="server">
                                     </td>
                                 </tr>
                             </GroupTemplate>
                             <EmptyDataTemplate>
                                 <table id="Table2" runat="server" 
                                     style="background-color: #FFFFFF;border-collapse: collapse;border-color: #999999;border-style:none;border-width:1px;">
                                     <tr>
                                         <td>
                                             未傳回資料。</td>
                                     </tr>
                                 </table>
                             </EmptyDataTemplate>
                             <EditItemTemplate>
                                 <td id="Td7" runat="server" style="background-color:#008A8C;color: #FFFFFF;">
                                     ItemCode:
                                     <asp:TextBox ID="TextBox1" runat="server" 
                                         Text='<%# Bind("ItemCode") %>' />
                                     <br />
                                     <asp:Button ID="UpdateButton" runat="server" CommandName="Update" Text="更新" />
                                     <br />
                                     <asp:Button ID="Button1" runat="server" CommandName="Cancel" Text="取消" />
                                     <br />
                                 </td>
                             </EditItemTemplate>
                             <ItemTemplate>
                                 <td id="Td8" runat="server" style="background-color:#DCDCDC;color: #000000;">
                                     <table class="style5">
                                         <tr>
                                          
                                             <td>
                                                商品編碼:
                                                 <asp:HyperLink ID="HyperLink2" runat="server" 
                                                     NavigateUrl='<%# Eval("ProductID", "DetailsItem.aspx?Id={0}") %>' 
                                                     Text='<%# Eval("ProductID") %>'></asp:HyperLink>
                                                 <br />
                                                 商品代碼:
                                                 <asp:Label ID="Label2" runat="server" Text='<%# Eval("ItemCode") %>'></asp:Label>
                                                 <br />
                                             </td>
                                         </tr>
                                     </table>
                                 </td>
                             </ItemTemplate>
                         </asp:ListView>
                    <asp:SqlDataSource ID="SqlDataSource2" runat="server" 
                            ConnectionString="Data Source=DESKTOP-VD3B4I4;Initial Catalog=&quot;Battery Ordering&quot;;User ID=sa;Password=sa123456!@#"                         
                             SelectCommand="SELECT [ProductID], [ItemCode] FROM [Product_specifications] WHERE ([CategoryName] = @CategoryName)">
                        <SelectParameters>
                            <asp:ControlParameter ControlID="DropDownList1" Name="CategoryName" 
                                PropertyName="SelectedValue" Type="String" />
                        </SelectParameters>
                    </asp:SqlDataSource>   

</asp:Content>


