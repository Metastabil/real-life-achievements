$(() => {
    new DataTable('.default-table', {
        pagingType: 'simple_numbers',
        lengthChange: false,
        ordering: false,
        info: false,
        columnDefs: [{
            targets: '_all',
            type: 'string'
        }],
        language: {
            emptyTable: lang['data_tables']['empty_table'],
            search: lang['data_tables']['search']
        }
    });
});