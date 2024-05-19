 <%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="register.aspx.cs" Inherits="register" Title="Registration" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style1
        {
            height: 47px;
        }
        .style2
        {
            width: 473px;
        }
        .style3
        {
            height: 47px;
            width: 473px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<br />
 <div class="row">
               <div class="col-md-6">
               
                  <div class="about_title_main" style="text-align:center">
                  
                    <h1 class="about_title"></h1>  
                         
                  </div>
               
                </div>
             </div> 

<table align="center" height="500" width="500">
<tr><td class="style2">
    <asp:Label ID="Label1" runat="server" Text="Username"></asp:Label></td>
    <td>
    <asp:TextBox ID="username" runat="server"></asp:TextBox></td></tr>
    
    
<tr><td class="style2">
    <asp:Label ID="Label2" runat="server" Text="Password" type="password"></asp:Label></td>
    <td><asp:TextBox ID="password" runat="server" TextMode="Password"></asp:TextBox></td></tr>
<tr><td class="style2">
    <asp:Label ID="Label8" runat="server" Text="Conform Password"></asp:Label></td>
    <td><asp:TextBox ID="conformpassword" runat="server" TextMode="Password"></asp:TextBox>
    </td></tr>
<tr><td class="style2">
    <asp:Label ID="Label3" runat="server" Text="Address"></asp:Label></td>
    <td><asp:TextBox ID="address" runat="server" TextMode="MultiLine"></asp:TextBox></td></tr>
<tr><td class="style3">
    <asp:Label ID="Label4" runat="server" Text="City"></asp:Label></td>
    <td class="style1"><asp:TextBox ID="city" runat="server"></asp:TextBox>
    </td></tr>
<tr><td class="style2">
    <asp:Label ID="Label5" runat="server" Text="State"></asp:Label></td>
    <td>
        <asp:TextBox ID="state" runat="server"></asp:TextBox>
    </td></tr>
<tr><td class="style2">
    <asp:Label ID="Label6" runat="server" Text="Email"></asp:Label></td>
    <td><asp:TextBox ID="email" runat="server" ontextchanged="email_TextChanged"></asp:TextBox>
    </td></tr>
<tr><td class="style2">
    <asp:Label ID="Label7" runat="server" Text="Phone no."></asp:Label></td>
    <td><asp:TextBox ID="phoneno" runat="server" ontextchanged="phoneno_TextChanged"></asp:TextBox></td></tr>

<tr><td align="center" colspan="2">
    <asp:Button ID="Button1" runat="server" Text="Submit" onclick="Button1_Click" 
        Font-Bold="True" Font-Size="Medium" /></td></tr>
    </table>


</asp:Content>

