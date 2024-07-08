<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" encoding="UTF-8"/>

  <xsl:template match="/">
    <html>
      <head>
        <title>Library Catalog</title>
        <style>
          body { font-family: Arial, sans-serif; background-color: #f8f8f8; }
          .book { margin: 10px; padding: 10px; border: 1px solid #ddd; background-color: #fff; }
          .title { font-weight: bold; color: #007BFF; }
          .author { color: #333; }
          .year { color: #666; }
        </style>
      </head>
      <body>
        <h2>Library Catalog</h2>
        <xsl:for-each select="library/book">
          <div class="book">
            <div class="title">Title: <xsl:value-of select="title"/></div>
            <div class="author">Author: <xsl:value-of select="author"/></div>
            <div class="year">Year: <xsl:value-of select="year"/></div>
          </div>
        </xsl:for-each>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>