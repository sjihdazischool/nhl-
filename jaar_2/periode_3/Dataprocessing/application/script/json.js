getTableData("http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api", "/overheidsfinancien", "/json", "GET", function(response) 
	{
		chart.options.data[0].name = 'Overheidssaldo';
		for (var j = 0; j < response.overheidsfinancien.data_per_jaar.length; j++) 
		{
			dataPoints1.push({
				x: response.overheidsfinancien.data_per_jaar[j]['Periode'],
				y: response.overheidsfinancien.data_per_jaar[j]['Overheidssaldo']
			});

		}
	});
	getTableData("http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api", "/bevolkingsontwikkeling", "/json", "GET", function(response) 
	{
		chart.options.data[1].name = 'Overledenen';
		for (var j = 0; j < response.bevolkingsontwikkeling.data_per_jaar.length; j++) 
		{
			dataPoints2.push({
				x: response.bevolkingsontwikkeling.data_per_jaar[j]['Periode'],
				y: response.bevolkingsontwikkeling.data_per_jaar[j]['Overledenen']
			});
		}
	});
	getTableData("http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api", "/bevolking_kerncijfers", "/json", "GET", function(response) 
	{
		console.log(response.bevolking_kerncijfers.data_per_jaar[0]['GrijzeDruk']);
		chart.options.data[2].name = 'Mannen';
		for (var j = 0; j < response.bevolking_kerncijfers.data_per_jaar.length; j++) 
		{
			dataPoints3.push({
				x: response.bevolking_kerncijfers.data_per_jaar[j]['Periode'],
				y: response.bevolking_kerncijfers.data_per_jaar[j]['Mannen']
			});
		}
	});
	chart.render();

	$('#getSelectedData').on('click', function() 
	{
		var selectedData1 = $('#selectedData1').val();
		var selectedData2 = $('#selectedData2').val();
		var selectedData3 = $('#selectedData3').val();
		getTableData("http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api", "/overheidsfinancien", "/json", "GET", function(response) 
		{
			chart.options.data[0].name = selectedData3;
			dataPoints1.length = 0;
			for (var j = 0; j < response.overheidsfinancien.data_per_jaar.length; j++) 
			{
				dataPoints1.push({
					x: response.overheidsfinancien.data_per_jaar[j]['Periode'],
					y: parseFloat(response.overheidsfinancien.data_per_jaar[j][selectedData3])
				});
			}
		});
		getTableData("http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api", "/bevolkingsontwikkeling", "/json", "GET", function(response) 
		{
			chart.options.data[1].name = selectedData2;
			dataPoints2.length = 0;
			for (var j = 0; j < response.bevolkingsontwikkeling.data_per_jaar.length; j++) 
			{
				dataPoints2.push({
					x: response.bevolkingsontwikkeling.data_per_jaar[j]['Periode'],
					y: parseFloat(response.bevolkingsontwikkeling.data_per_jaar[j][selectedData2])
				});
			}
		});
		getTableData("http://localhost/NHL_stenden/nhl-/jaar_2/periode_3/Dataprocessing/api", "/bevolking_kerncijfers", "/json", "GET", function(response) 
		{
			chart.options.data[2].name = selectedData1;
			dataPoints3.length = 0;
			for (var j = 0; j < response.bevolking_kerncijfers.data_per_jaar.length; j++) 
			{
				dataPoints3.push({
					x: response.bevolking_kerncijfers.data_per_jaar[j]['Periode'],
					y: parseFloat(response.bevolking_kerncijfers.data_per_jaar[j][selectedData1])
				});
			}
		});
		chart.render();
	});