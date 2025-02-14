<%@ Page Title="系統登入" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" 
    CodeBehind="deford.aspx.cs" Inherits="WebLogin.deford" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
    <div style="text-align:center;">
        <table style="margin:auto; width: 100%" cellpadding="0" cellspacing="0" >
            <tr>
                <td style="background-color: #4800ff; height: 50px;">
                    <asp:Label ID="lbProgramTitle" runat="server" Text="系     統     登     入" Font-Bold="True" Font-Size="X-Large" ForeColor="White" BackColor="#4800ff"></asp:Label>
                </td>
            </tr>
        </table>
    </div>
   <div style="text-align:center; width:100%">
    <table style="margin:auto; width: 600px">
        <tr "height=25px">
            <td style="text-align:right" class="auto-style13" >
                &nbsp;</td>
            <td style="text-align:left" class="auto-style14">
                &nbsp;</td>
            <td style="width: 100px; text-align:right">
                &nbsp;</td>
            <td style="width: 100px; text-align:left">
                &nbsp;</td>
            <td style="width: 100px; text-align:left">
                &nbsp;</td>
            <td style="width: 100px; text-align:left">
                &nbsp;</td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right" colspan="6" >
                &nbsp;</td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right; " class="auto-style1" colspan="6" >
                </td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right" class="auto-style18" >
                </td>
            <td style="text-align:right; background-color: #9999FF;" class="auto-style19">
                <asp:Label ID="Label2" runat="server" Text="使用者帳號：" Font-Size="Medium" ForeColor="Black"></asp:Label>
            </td>
            <td style="text-align:left" colspan="3" class="auto-style20">
                <asp:TextBox ID="txtCustomerID" runat="server" Width="100%" ForeColor="#878787" Font-Size="Medium"></asp:TextBox>
            </td>
            <td style="text-align:left" class="auto-style12">
                </td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right" class="auto-style15" >
                </td>
            <td style="text-align:left" class="auto-style16">
                </td>
            <td style="text-align:left" colspan="3" class="auto-style17">
                </td>
            <td style="text-align:left" class="auto-style17">
                </td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right" class="auto-style18" >
                </td>
            <td style="text-align:right; background-color: #9999FF;" class="auto-style19">
                <asp:Label ID="Label3" runat="server" Text="密碼：" Font-Size="Medium" ForeColor="Black"></asp:Label>
            </td>
            <td style="text-align:left" colspan="3" class="auto-style20">
                <asp:TextBox ID="txtPasswordCode" runat="server" Password="True" Width="100%" ForeColor="#878787" Font-Size="Medium" TextMode="Password"></asp:TextBox>
            </td>
            <td style="text-align:left" class="auto-style12">
                </td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right" colspan="6" >
                &nbsp;</td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right" colspan="6" >
                &nbsp;</td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right" class="auto-style13" >
                &nbsp;</td>
            <td style="text-align:left" class="auto-style14">
                &nbsp;</td>
            <td style="text-align:left" colspan="2">
                <asp:Button ID="BtnLogin" runat="server" BackColor="#4800ff" BorderColor="#4800ff" Font-Bold="True" Font-Size="Medium" ForeColor="White" Text="登    入" Width="100%" OnClick="BtnLogin_Click" CssClass="auto-style6" Height="32px" />
                </td>
            <td style="width: 100px; text-align:left">
                &nbsp;</td>
            <td style="width: 100px; text-align:left">
                &nbsp;</td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right" colspan="6" >
                &nbsp;</td>
        </tr>
        <tr "height=25px">
            <td style="text-align:left" colspan="5" >
                &nbsp;</td>
            <td style="text-align:left" >
                &nbsp;</td>
        </tr>
        <tr "height=25px">
            <td style="text-align:left" colspan="5" >
                &nbsp;</td>
            <td style="text-align:right" >
                &nbsp;</td>
        </tr>
        <tr "height=25px">
            <td style="text-align:right" colspan="6" >
                &nbsp;</td>
        </tr>
        </table>
    </div>

</asp:Content>
<asp:Content ID="Content1" runat="server" contentplaceholderid="head">
    <style type="text/css">
    .auto-style1 {
        height: 22px;
    }
        .auto-style6 {
            margin-left: 0px;
        }
        .auto-style12 {
            width: 100px;
            height: 32px;
        }
        .auto-style13 {
            width: 52px;
        }
        .auto-style14 {
            width: 121px;
        }
        .auto-style15 {
            width: 52px;
            height: 25px;
        }
        .auto-style16 {
            width: 121px;
            height: 25px;
        }
        .auto-style17 {
            height: 25px;
        }
        .auto-style18 {
            width: 52px;
            height: 32px;
        }
        .auto-style19 {
            width: 121px;
            height: 32px;
        }
        .auto-style20 {
            height: 32px;
        }
    </style>
</asp:Content>
