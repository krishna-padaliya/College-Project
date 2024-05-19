<%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="editresume.aspx.cs" Inherits="editresume" Title="Edit Resume" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<div id="main">
			<div class="container" style="margin-left: 400px">
			<table height="450" width="400" align="center" style="margin-top:50px; margin-left:30px">
<tr><td colspan="2" align="center">    <asp:Label ID="Label5" runat="server" 
        Text="Edit Cart" Font-Bold="True" Font-Size="30pt" ForeColor="Black"></asp:Label>
</td></tr>

<tr><td><asp:Label ID="Label1" runat="server" Text="product ID" Font-Bold="True"  ForeColor="Black" Font-Size="Larger"></asp:Label></td><td>
    &nbsp;&nbsp;&nbsp;<asp:Label 
        ID="lblitem_id" runat="server"></asp:Label></td></tr>

<tr><td><asp:Label ID="Label2" runat="server" Text="product Name" Font-Bold="True"  ForeColor="Black" Font-Size="Larger"></asp:Label></td><td>
    &nbsp;&nbsp;&nbsp;<asp:Label ID="lblname" runat="server" Text=""></asp:Label></td></tr>

<tr><td><asp:Label ID="Label3" runat="server" Text="product Price" Font-Bold="True"  ForeColor="Black" Font-Size="Larger"></asp:Label></td><td>
    &nbsp;&nbsp;&nbsp;<asp:Label ID="lblprice" runat="server" Text=""></asp:Label></td></tr>

<tr><td valign="top"><asp:Label ID="Label9" runat="server" Text="Image" Font-Bold="True"  ForeColor="Black" Font-Size="Larger"></asp:Label></td><td>
    &nbsp;&nbsp;&nbsp;<asp:Image ID="Image1" runat="server" height="100" Width="100"/></td></tr>


<tr><td colspan="2" align="center">
    <asp:HiddenField ID="HiddenField1" runat="server" />
    <asp:Button ID="btnupdate" runat="server" Text="Update" onclick="btnupdate_Click" /></td></tr>
</table>
</div>
</div>

</asp:Content>

