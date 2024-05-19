<%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="productdetail.aspx.cs" Inherits="productdetail
" Title="Productdetails" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<%--<form id="frm1" runat="server">--%>
<br />
<br />
<br />

<center>
<table height="300" width="600" border="1">
<tr><th colspan="3" align="center"> <center>Job Details</center></th></tr>
<tr><td rowspan="6" align="center" valign="middle"><asp:Image ID="Image1" runat="server" Height="100" Width="100"/>

    <asp:HiddenField ID="hdnc" runat="server" />
    </td>
<td><asp:Label ID="Label1" runat="server" Text="Job Id"></asp:Label></td>
<td><asp:Label ID="lblp_id" runat="server" Text=""></asp:Label></td>
</tr>

<tr>
<td><asp:Label ID="Label3" runat="server" Text="Job name"></asp:Label></td>
<td><asp:Label ID="lblp_nm" runat="server" Text=""></asp:Label></td>
</tr>

<tr>
<td><asp:Label ID="Label5" runat="server" Text="Salary"></asp:Label></td>
<td><asp:Label ID="lblp_sal" runat="server" Text=""></asp:Label></td>
</tr>
 <tr><td width="100 <asp:Label ID="Label2" runat="server" Text="Add resume"></asp:Label></td>
</a>
 
    <td><asp:FileUpload ID="FileUpload1" runat="server" BorderStyle="Double" /></td></tr>



<tr>
<td colspan="2" align="center"><asp:Button ID="Button1" runat="server" 
        Text="submit resume" onclick="Button1_Click" /></td>
</tr>
</table>
</center>
<br />
<br />
<br />

<%--</form>--%>
</asp:Content>

