<%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="login.aspx.cs" Inherits="login" Title="Login" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
             <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main" style="margin-left:410px">
                     <h1 class="about_taital">Log In</h1>    
                  </div>
                </div>
             </div>
<table align="center" height="200" width="400">
    <tr>
    <td><asp:Label ID="Label1" runat="server" Text="User"></asp:Label></td>
    <td>
        <asp:TextBox ID="txtuname" runat="server"></asp:TextBox>
        </td>    
    </tr>
    
    <tr><td>
        <asp:Label ID="Label2" runat="server" Text="Password"></asp:Label>
        </td><td>
            <asp:TextBox ID="txtpass" runat="server"></asp:TextBox>
        </td></tr>
    
    <tr align=center><td colspan="2">
        <asp:Button ID="btnlogin" runat="server" Text="Login" onclick="btnlogin_Click" style="height: 26px" />
        <asp:Label ID="lblmsg" runat="server"></asp:Label>
        <br />
        <br />
        <asp:HyperLink ID="HyperLink1" runat="server" NavigateUrl="~/Register.aspx" style="color:Maroon">New User???</asp:HyperLink>
        </td></tr>
    </table>
    
</asp:Content>

