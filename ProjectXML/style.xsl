<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : style.xsl
    Created on : 19 aprilie 2023, 16:56
    Author     : Asus
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    <xsl:template match="/">
        <html>
            <head>
                <title>Jucători de fotbal</title>
            </head>
            <body bgcolor="#FFF0F5">
                 <table border="1" align="center">
                    <tr bgcolor="#20B2AA">
                        <th style="width:300px">Nume</th>
                        <th style="width:300px">Țara</th>
                        <th style="width:300px">Clasament mondial</th>
                         <th style="width:300px">Informații</th>
                    </tr>
                    <xsl:for-each select="root/date">
                        <tr>
                            <td style="width:300px"><xsl:value-of select="Nume"/></td>
                            <td style="width:300px"><xsl:value-of select="Tara"/></td>
                            <td style="width:300px"><xsl:value-of select="Clasament_mondial"/></td>
                            <td style="width:300px"> <xsl:element name="a">
                    <xsl:attribute name="href">
                        <xsl:value-of select="link_url"/>
                    </xsl:attribute>
                    <span>Informații despre jucător</span>
                </xsl:element></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
            <a href="index.php">Înapoi</a>
        </html>
    </xsl:template>

</xsl:stylesheet>

