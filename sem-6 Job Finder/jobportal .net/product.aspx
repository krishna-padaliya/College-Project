<%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="product.aspx.cs" Inherits="product" Title="Available Jobs" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
  <%--<form id="form1" runat="server">--%>
  <center>
      <asp:DataList ID="DataList1" runat="server" RepeatColumns="4" CellSpacing="15" cellPadding= "15"
        >
        <SeparatorStyle />
        
    <HeaderTemplate>
    
    </HeaderTemplate>
    
        <ItemTemplate>
       <asp:HyperLink ID="HyperLink1" runat="server" NavigateUrl='<%# "productdetail.aspx?id=" + Eval("p_id")  %>'>
           <asp:Image ID="Image1" runat="server" ImageUrl='<%# Eval("p_img") %>' Height="150" Width="150"/>
            </asp:HyperLink>   
            
           <br>
        
            <asp:Label ID="Label1" runat="server" Text='<%# Eval("p_sal") %>'></asp:Label>
        
        </ItemTemplate>
        
    <FooterTemplate>
    
    </FooterTemplate>
    </asp:DataList>
    </center>

    <%--</form>--%>
</asp:Content>

